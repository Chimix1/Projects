import { useState } from 'react'

const Statistics = ({text, value}) => {
  return (
  <div>
    <table>
      <tr>
        <td>{text}</td>
        <td>{value}</td>
  </tr>
  </table>
  </div>
  )
}

const Total = ({good, neutral, bad}) => {
  const total = good + neutral + bad
  if (total === 0) {
		return (
			<div>
				<h3>No Feedback Given Now</h3>
			</div>
		)
	} 
	return (
		<div>
			<Statistics text="good" value={good}/>
      <Statistics text="neutral" value={neutral}/>
      <Statistics text="bad" value={bad}/>
      <Statistics text="total" value={total}/>
      <Statistics text="average" value={(good - bad)/(good + neutral + bad)}/>
      <Statistics text="postive" value={(good + neutral)/(good + neutral + bad)*(100)} />
			
		</div>
	)
}

const Button = ({onClick, text}) => {
  return(
    <div>
     <button onClick={onClick}>{text}</button>
    </div>
  )
}

const App = () => {
  // save clicks of each button to its own state
  const [good, setGood] = useState(0)
  const [neutral, setNeutral] = useState(0)
  const [bad, setBad] = useState(0)

 
  
  return (
    <div>
      <h1>Give feedback</h1>
      
      <td><Button onClick={() => setGood(good + 1)} text="good"/> </td>
        
      <td><Button onClick={() => setNeutral(neutral + 1)} text="neutral"/></td>
       
      <td><Button onClick={() => setBad(bad + 1)} text="bad"/></td>
      
      <h2>Statistics</h2>
      <Total
      good={good}
      neutral={neutral}
      bad={bad}     
      />
    </div>
  )
}

export default App