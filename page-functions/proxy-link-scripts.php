<script>
    // Function to handle the URL generation when the button is clicked
    document.getElementById('generate-btn').addEventListener('click', function() {
        // Get the original URL from the input field
        const originalUrl = document.getElementById('original-url').value;
        // Define the proxy URL prefix
        const proxyPrefix = 'https://login.bard.idm.oclc.org/login?url=';
        // Combine the proxy prefix with the original URL
        const proxiedUrl = proxyPrefix + originalUrl;
        // Output the proxied URL in the second input field
        document.getElementById('proxy-url').value = proxiedUrl;
    });

    // Function to copy the proxied URL to the clipboard
    document.getElementById('copy-btn').addEventListener('click', function() {
        // Get the proxied URL from the input field
        const proxiedUrl = document.getElementById('proxy-url').value;

        // Create a temporary input element to copy the text
        const tempInput = document.createElement('input');
        tempInput.value = proxiedUrl;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        // Optionally, show an alert that the URL has been copied
        alert('Proxied URL copied to clipboard!');
    });

    // Function to clear the original URL input field
    document.getElementById('clear-btn').addEventListener('click', function() {
        // Clear the original URL input field
        document.getElementById('original-url').value = '';
        document.getElementById('proxy-url').value = '';
    });
</script>
