import React from 'react'

import './min.css'

import { Link } from "react-router-dom"

export default class Header extends React.Component {
  render() {
    return (
      <div class="flex items-center bg-black app_ui_nav_Navbar__navbar">
        <div class="hidden lg:flex items-center">
          <Link
            to="/услуги"
            className="ch-link-button  text-white mr-6 last:mr-0">
            <span class=" hover:opacity-60">Услуги</span>
          </Link>
          <Link
            to="/кабинет"
            className="ch-link-button  text-white mr-6 last:mr-0">
            <span class=" hover:opacity-60">
              Мои заявки
              <span class="ml-2 -mb-2px  i-external-link bg-white">
              </span>
            </span>
          </Link>
        </div>
        <div class="flex-1">
        </div>
        <div class="hidden lg:flex items-center">
          <Link
            to="/регистрация"
            className="ch-link-button  text-white mr-6 last:mr-0">
            <span class=" hover:opacity-60">
              Регистрация
            </span>
          </Link>
          <Link to="/вход" className="c-button ch-button">
            Войти
          </Link>
        </div>
        <div class="flex lg:hidden items-center">
          <a class="ch-link-button text-white">
            <span class="ch-underline">Меню</span>
          </a>
        </div>
      </div>
    )
  }
}
