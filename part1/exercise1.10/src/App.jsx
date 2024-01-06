import { useState } from 'react'

const Statistics = ({text, value}) => {
  return <div>
  <p>{text} {value}</p>
  </div>
}

const Total = ({good, neutral, bad}) => {
  const total = good + neutral + bad
  if (total === 0) {
		return (
			<div>
				<h4>No Feedback Given Now</h4>
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
      <Statistics text="postive %" value={(good + neutral)/(good + neutral + bad)*(100)}/>
			
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
      <p>Give feedback</p>
      <Button onClick={() => setGood(good + 1)} text="good"/>
        
      <Button onClick={() => setNeutral(neutral + 1)} text="neutral"/>
       
      <Button onClick={() => setBad(bad + 1)} text="bad"/>
        
      <p>Statistics</p>
      <Total
      good={good}
      neutral={neutral}
      bad={bad}     
      />
    </div>
  )
}

export default App