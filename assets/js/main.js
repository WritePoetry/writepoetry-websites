

( () => {
	'use strict';
	let repo = 'https://api.github.com/repos/giacomo-secchi/write-poetry/releases/latest';
	// Get the github repo latest release version from GitHub
	fetch( repo )
		.then( ( response ) => response.json() )
		.then( ( data ) => {
			const version = data.tag_name;
			
			document.getElementById( 'repo-version' ).textContent = version;
		} )
		.catch( ( error ) => console.error( error ) );
} )();
