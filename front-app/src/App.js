import React, { useEffect, useState } from 'react';
import axios from 'axios';
import AddProduct from './AddProduct';

function App() {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/products')
      .then(response => {
        setProducts(response.data);
      })
      .catch(error => console.log(error));
  }, []);

  return (
    <div>
      <h1>Add Product</h1>
      <AddProduct />
      <br />
      <br />
      <h1>Products</h1>
      <ul>
        {products.map(product => (
          <li key={product.id}>{product.name} - ${product.price}</li>
        ))}
      </ul>
    </div>
  );
}

export default App;
