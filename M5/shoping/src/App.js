import logo from './logo.svg';
import './App.css';
import LayoutMaster from './layouts/LayoutMaster';
import { Routes } from 'react-router-dom';
import Home from './pages/Home';
import SanPhamShow from './pages/SanPhamShow';
import Cart from './pages/Cart';

function App() {
  return (
    <LayoutMaster>
    <div className="App">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/sanpham/:id" element={<SanPhamShow />} />
          <Route path="/cart" element={<Cart />} />
        </Routes>
    </div>
  </LayoutMaster>
  );
}

export default App;
