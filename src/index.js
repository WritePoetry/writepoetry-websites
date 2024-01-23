
import domReady from '@wordpress/dom-ready';

domReady(  () => {
	'use strict';
	
    let repoElement = document.querySelector( '#current-version' );
    
    if ( ! repoElement ) {
        return;
    }
    
	// Get repo from data attribute
	let repo = repoElement.getAttribute( 'data-repo' );

	// Get the github repo latest release version from GitHub
	fetch( repo )
		.then( ( response ) => response.json() )
		.then( ( data ) => {
			const version = data.tag_name;
			const url = data.html_url;
			const element = document.querySelector( '#repo-version' );
			
			if ( ! element ) {
				return;
			}

			element.textContent = version;
      		element.href = url;
		} )
		.catch( ( error ) => console.error( error ) );

} );
