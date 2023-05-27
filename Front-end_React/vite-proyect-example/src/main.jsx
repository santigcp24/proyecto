import React from 'react'
import ReactDOM from 'react-dom/client'
import CreatePerson from './formularioPersona.jsx'
import PersonList from './PersonList.jsx'


ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    
    <CreatePerson/>
    <PersonList/>

  </React.StrictMode>,
)

