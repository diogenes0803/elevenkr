import './App.css';
import NavBar from './componenets/commons/NavBar';
import BlackList from './componenets/blacklist/Blacklist';
import Online from './componenets/online/Online';
import Match from './componenets/match/Match';
import Rank from './componenets/rank/Rank';
import { Routes, Route } from "react-router-dom";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <NavBar/>
      </header>
      <Routes>
        <Route path="/" element={<Online/>} />
        <Route path="/online" element={<Online/>} />
        <Route path="/match" element={<Match/>} />
        <Route path="/rank" element={<Rank/>} />
        <Route path="/blacklist" element={<BlackList/>} />
      </Routes>
    </div>
  );
}

export default App;
