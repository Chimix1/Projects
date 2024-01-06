import { useState } from 'react'

const Statistics = (props) => {
  if (props.total === 0) {
		return (
			<div>
				<h3>No Feedback Given Now</h3>
			</div>
		)
	} 
	return (
		<div>
			<p>Good: {props.good}</p>
			<p>Neutral: {props.neutral}</p>
			<p>Bad: {props.bad}</p>
			<p>All: {props.total}</p>
			<p>Average: {props.Average}</p>
			<p>Positive: {props.Positive} %</p>
		</div>
	)
}

const App = () => {
  // save clicks of each button to its own state
  const [good, setGood] = useState(0)
  const [neutral, setNeutral] = useState(0)
  const [bad, setBad] = useState(0)
  //const [allClicks, setAll] = useState([])
  //const [total, setTotal] = useState(0)

  //const handleGoodClick = () => {
    //setAll(allClicks.concat())
    //const updatedGood = good + 1
    //setGood(updatedGood)
    //setTotal(updatedGood + neutral + bad)
  //}

  //const handleNeutralClick = () => {
    //setAll(allClicks.concat())
    //const updatedNeutral = neutral + 1
    //setNeutral(updatedNeutral)
    //setTotal(good + updatedNeutral + bad)
  //}

  //const handleBadClick = () => {
    //setAll(allClicks.concat())
    //const updatedBad = bad + 1
    //setBad(updatedBad)
    //setTotal(good + neutral + updatedBad)
  //}
  

  return (
    <div>
      <p>Give feedback</p>
      <button onClick={() => setGood(good + 1)}>
        good
      </button>
      
      <button onClick={() => setNeutral(neutral + 1)}>
        neutral
      </button>
      <button onClick={() => setBad(bad + 1)}>
        bad
      </button>
      <p>Statistics</p>
      <Statistics
      good={good}
      neutral={neutral}
      bad={bad}
      total={good + neutral + bad}
      Average={(good - bad)/(good + neutral + bad)}
      Positive={(good + neutral)/(good + neutral + bad)*(100)} 
      />
    </div>
  )
}

export default App