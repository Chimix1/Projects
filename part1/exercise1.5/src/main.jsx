import React from 'react';
import ReactDOM from 'react-dom/client';

const App = () => {
	const course = {
		name: 'Half Stack application development',
		parts: [
			{
				name: 'Fundamentals of React',
				exercises: 10
			},
			{
				name: 'Using props to pass data',
				exercises: 7
			},
			{
				name: 'State of a component',
				exercises: 14
			}
		]
	}

	return (
		<div>
			<h1>{course.name}</h1>
			<Content course={course} />
			<Total course={course} />
		</div>
	)
}

const Content = (props) => {
	const lists = props.course.parts.map(function(item) {
		return (
			<div>
				<p>{item.name}: {item.exercises}</p>
			</div>
		)
	})
	
	return lists
}

const Total = (props) => {
	var score = 0
	
	const lists = props.course.parts.map(function(item) {
		
		score = score + item.exercises
		
		return score
	})
	
	return (
		<div>
			<p>Number of exercises: {score}</p>
		</div>
	)
}

ReactDOM.createRoot(document.getElementById('root')).render(<App />)