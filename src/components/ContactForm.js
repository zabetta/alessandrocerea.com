// src/components/ContactForm.js
import React, { useState } from 'react';
import emailjs from 'emailjs-com';
import './ContactForm.css';

const ContactForm = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    message: ''
  });
  const [messageSent, setMessageSent] = useState(false);  // Per mostrare conferma di invio

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    // Parametri di invio
    const templateParams = {
      name: formData.name,
      email: formData.email,
      message: formData.message,
    };

    emailjs.send('service_bqja3ln', 'template_8weyhxg', templateParams, 'YFEPSVTnBbBVHFL3d')
      .then((response) => {
        console.log('SUCCESS!', response.status, response.text);
        setMessageSent(true);  // Mostra messaggio di successo
        setFormData({ name: '', email: '', message: '' });  // Resetta il form
      }, (error) => {
        console.log('FAILED...', error);
      });
  };

  return (
    <form className="contact-form" onSubmit={handleSubmit}>
      <h2>Scrivimi</h2>
      {messageSent && <p className="success-message">Messaggio inviato con successo!</p>}
      
      <label htmlFor="name">Nome:</label>
      <input
        type="text"
        id="name"
        name="name"
        value={formData.name}
        onChange={handleChange}
        required
      />

      <label htmlFor="email">Email:</label>
      <input
        type="email"
        id="email"
        name="email"
        value={formData.email}
        onChange={handleChange}
        required
      />

      <label htmlFor="message">Messaggio:</label>
      <textarea
        id="message"
        name="message"
        value={formData.message}
        onChange={handleChange}
        required
      />

      <button type="submit">Invia</button>
    </form>
  );
};

export default ContactForm;
