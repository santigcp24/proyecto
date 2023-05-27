import React, { useState } from "react";
import axios from "axios";

const CreatePerson = () => {
  const [id, setId] = useState('');
  const [name, setName] = useState('');
  const [lastname, setLastname] = useState('');
  const [identity, setIdentity] = useState('');
  const [email, setEmail] = useState('');
  const [phone, setPhone] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();

    const personData = {
      id: id,
      name: name,
      lastname: lastname,
      identity: identity,
      email: email,
      phone: phone
    };

    axios.post('http://127.0.0.1:8000/api/Person',personData)
    .catch(e => {
      console.log(e.response)
    })
    /*fetch('http://127.0.0.1:8000/api/Person/', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(personData)
    })
      .then(response => response.json())
      .then(data => {
        console.log('Persona creada exitosamente', data);
      })
      .catch(error => console.error('error al crear a la persona:', error));*/
    /*setId(''); 
    setName('');
    setLastname('');
    setIdentity('');
    setEmail('');
    setPhone('');*/
  };

  return (
    <div className="container text-center">
      <h2> registrar persona</h2>
      <form onSubmit={handleSubmit}>
        <div>
          <label>ID:</label>
          <input type="text" value={id} onChange={(e) => setId(e.target.value)} className="form-control" />
        </div>
        <div>
          <label>Nombre:</label>
          <input type="text" value={name} onChange={(e) => setName(e.target.value)} className="form-control" />
        </div>
        <div>
          <label>Apellido:</label>
          <input type="text" value={lastname} onChange={(e) => setLastname(e.target.value)} className="form-control" />
        </div>
        <div>
          <label>Identificacion:</label>
          <input type="text" value={identity} onChange={(e) => setIdentity(e.target.value)} className="form-control" />
        </div>
        <div>
          <label>Correo electronico:</label>
          <input type="text" value={email} onChange={(e) => setEmail(e.target.value)} className="form-control" />
        </div>
        <div>
          <label>Telefono:</label>
          <input type="text" value={phone} onChange={(e) => setPhone(e.target.value)} className="form-control" />
        </div>
        <button type="submit" className='btn btn-primary btn-sm mt-4'>Guardar</button>
      </form>
    </div>
  );
};

export default CreatePerson;

