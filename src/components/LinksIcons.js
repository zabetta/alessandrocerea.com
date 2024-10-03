import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLinkedin } from '@fortawesome/free-brands-svg-icons';

const LinksIcons = () => {

    const linkedinUrl = 'https://www.linkedin.com/in/alessandrocerea'; // Sostituisci con il tuo URL

    return (
        <a href={linkedinUrl} target="_blank" rel="noopener noreferrer">
            <FontAwesomeIcon icon={faLinkedin} size="2x" />
        </a>
    );
};

export default LinksIcons;