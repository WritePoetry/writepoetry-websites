
import domReady from '@wordpress/dom-ready';
import './style.css';



const initialize = () => {
	'use strict';
	
    let repoElement = document.querySelector( '#current-version' );
    
    if ( ! repoElement ) {
		console.error( 'Repo element not found' );
        return;
    }
    
	// Get repo from data attribute
	let repo = repoElement.getAttribute( 'data-repo' );

	// Get the github repo latest release version from GitHub
	fetch( repo )
		.then( ( response ) => response.json() )
		.then( ( { tag_name, html_url } ) => {
			 
			const element = document.querySelector( '#repo-version' );
			
			if ( ! element ) {
				console.error( 'Version element not found' );
				return;
			}

			element.textContent = tag_name;
      		element.href = html_url;
		} )
		.catch( ( error ) => console.error( error ) );
};

if ( typeof window !== 'undefined' ) {
	domReady( initialize );
}

