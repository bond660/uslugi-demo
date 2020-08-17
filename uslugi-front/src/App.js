import React from "react"
import { BrowserRouter as Router } from "react-router-dom"

import Header from './Header.jsx'
import Switch from './Switch.jsx'

export default function App() {
  return (
    <Router>
      <nav>
        <Header />
      </nav>
      <div>
        <Switch />
      </div>
    </Router>
  )
}
