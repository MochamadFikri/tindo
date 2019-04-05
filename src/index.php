import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" width="200px" />
          <p>
            <h3>Aplikasi tanggal Indonesia</h3>
          </p>
        </header>
        <form method="post">
          <div class="dalam">
            <table cellPadding="10px">
                <tr>
                  <td>Tanggal Luar</td>
                  <td>:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Tanggal Indonesia</td>
                  <td>:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td colSpan="3"><button>Eksekusi</button></td>
                </tr>
            </table>
            </div>
          </form>
      </div>
    );
  }
}

export default App;
