import React from 'react'
import {createRoot} from 'react-dom/client'
const Test = () => {
  return (
    <div>
      <p>Hello Test</p>
    </div>
  )
}

createRoot(document.getElementById('root')).render(<Test/>);

