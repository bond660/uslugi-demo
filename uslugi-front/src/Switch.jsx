import React from 'react'

import { Switch, Route} from "react-router-dom"

export default class Component extends React.Component {
  render() {
    return (
      <Switch>
        <Route path="/услуги">
          <PageServices />
        </Route>
        <Route path="/кабинет">
          <PageUser />
        </Route>
        <Route path="/вход">
          <PageLogin />
        </Route>
        <Route path="/регистрация">
          <PageRegister />
        </Route>
        <Route path="/">
          <PageHome />
        </Route>
      </Switch>
    )
  }
}

function PageHome() {
  return <h2>Home</h2>;
}

function PageServices() {
  return <h2>Services</h2>;
}

function PageUser() {
  return <h2>User page</h2>;
}

function PageRegister() {
  return <h2>Register</h2>;
}

function PageLogin() {
  return <h2>Login</h2>;
}
