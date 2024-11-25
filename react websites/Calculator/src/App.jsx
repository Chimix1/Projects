import { useState } from "react";
import Header from "./components/Header.jsx"
import Userinput from "./components/Userinput.jsx"
import Results from "./components/Results.jsx";

function App() {
  const [userInput, setUserInput] = useState({
    intialInvestment: 10000,
    annualInvestment: 1200,
    expectedReturn: 6,
    duration: 10
});

function handleChange(inputIdentifier ,newValue) {
  setUserInput(prevUserInput => {
      return{
          ...prevUserInput,
          [inputIdentifier]: +newValue
      };
  });
}

  return (
    <>
    <Header/>
    <Userinput userInput={userInput} onChange={handleChange}/>
    <Results input={userInput}/>
    </>
  )
}

export default App
