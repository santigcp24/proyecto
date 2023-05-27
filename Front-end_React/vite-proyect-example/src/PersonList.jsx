import React, {useEffect,useState} from "react";
import { Link } from "react-router-dom";


const PersonList = () => {
   const[person, setPerson] = useState([]);

   useEffect(() => {
    fetch("http://127.0.0.1:8000/api/Person/")
    .then((response) => response.json())
    .then(data => setPerson(data))
    .catch(error => console.error(error));
   }, []);

   const handleDelete = (id) => {
    fetch(`http://127.0.0.1:8000/api/countries/${id}`, {
        method: 'DELETE'
   })
      .then((response) => response.json())
      .then(data => {
        if (data.succes){    
        }else{
            console.error('error al eliminar la persona', data.error);
        }
      })
      .catch(error=> console.error('Error al realizar el llamado a la api',error));
};

return(
    <div className="container texte-center">
        <h1>Lista de personas</h1>
        {person.map(person => (
            <div key={person.id}>
                <div className="card">
                    <p>ID: {person.id}</p>
                    <p>nombre de la persona: {person.name}</p>
                    <p>apellido de la persona: {person.lastname}</p>
                    <p>identificacion de la persona: {person.identity}</p>
                    <p>telefono de la persona: {person.phone}</p>
                </div>
                   <button onClick={() => handleDelete(person.id)} className="btn btn-danger"> Eliminar </button>
                   <Link></Link>
                   <button onClick={() => handleUpdate(person.id)} className="btn btn-warning"> Actualizar</button>
                <hr/>
            </div>
        ))}
    </div>
    );
};

export default PersonList;