import { use , useState, useEffect} from 'react';
import useHttp from "../hooks/useHttp";

import { Opinion } from './Opinion';
import { OpinionsContext } from '../store/opinions-context';

export function Opinions() {
  const [opinions, setOpinions]= useState([]);

  useEffect(() => {
   fetch('http://localhost:3000/opinions').then(resp => resp.json()).then(data => {
      setOpinions(data);
    });
    
  }, []);
  return (
    <div id="opinions">
      <h2>User Opinions</h2>
      {opinions.length>0 ?(
        <ul>
          {opinions.map((o) => (
            <li key={o.id}>
              <Opinion opinion={o} />
            </li>
          ))}
        </ul>
      ):(
        <p>No opinions found. Maybe share your opinion on something?</p>
      )}
    </div>
  );
}
