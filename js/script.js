


document.addEventListener('DOMContentLoaded', function() {
  const resultBody = document.getElementById('qr-result-body');
  const html5QrcodeScanner = new Html5QrcodeScanner(
    "qr-reader",
    {
      fps: 10,
      qrbox: { width: 250, height: 250 },
      formatsToSupport: Html5QrcodeSupportedFormats.QR_CODE
    }
  );

  // Retrieve stored data from local storage
  const storedData = JSON.parse(localStorage.getItem('qrCodeData')) || [];

  // Populate the table with stored data
  storedData.forEach(function(decodedText) {
    addRowToTable(decodedText);
  });

  function addRowToTable(decodedText) {
    const newRow = resultBody.insertRow();
    const dataCell = newRow.insertCell();
    dataCell.classList.add('truncate-text'); // Add class for truncating text
    dataCell.textContent = decodedText;

    const actionCell = newRow.insertCell();

    const copyButton = document.createElement('span');
    copyButton.classList.add('copy-button');
    copyButton.innerHTML = '<i class="fas fa-copy"></i>';
    copyButton.addEventListener('click', function() {
      copyToClipboard(decodedText);
      alert('Text copied to clipboard!');
    });
    copyButton.setAttribute('data-toggle', 'tooltip');
    copyButton.setAttribute('data-placement', 'top');
    copyButton.setAttribute('title', 'Copy to clipboard');
    actionCell.appendChild(copyButton);

    const deleteButton = document.createElement('span');
    deleteButton.classList.add('delete-button');
    deleteButton.innerHTML = '<i class="fas fa-trash-alt"></i>';
    deleteButton.addEventListener('click', function() {
      deleteRowFromTable(newRow, decodedText);
    });
    deleteButton.setAttribute('data-toggle', 'tooltip');
    deleteButton.setAttribute('data-placement', 'top');
    deleteButton.setAttribute('title', 'Delete');
    actionCell.appendChild(deleteButton);
  }

  function deleteRowFromTable(row, decodedText) {
  const confirmation = confirm('Are you sure you want to delete this item?');
  if (confirmation) {
    resultBody.removeChild(row);
    const index = storedData.indexOf(decodedText);
    if (index > -1) {
      storedData.splice(index, 1);
      localStorage.setItem('qrCodeData', JSON.stringify(storedData));
    }
  }
}

  function copyToClipboard(text) {
    const tempInput = document.createElement('input');
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
  }

  function onScanSuccess(decodedText, decodedResult) {
    addRowToTable(decodedText);

    // Store the decoded text in local storage
    storedData.push(decodedText);
    localStorage.setItem('qrCodeData', JSON.stringify(storedData));

    alert(`QR code successfully scanned. Decoded text: ${decodedText}`);
  }

  html5QrcodeScanner.render(onScanSuccess);

  // Initialize tooltips
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });


  // smssmsms

//   function sendSMS(message, recipientPhoneNumber) {
//   // Replace with your SMS service provider API endpoint and authentication
//   const apiUrl = 'https://rest.nexmo.com/sms/json';
//   const apiKey = 'fd19536f';

//   // Make an API call to send the SMS
//   fetch(apiUrl, {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//       'Authorization': `Bearer ${apiKey}`
//     },
//     body: JSON.stringify({
//       to: recipientPhoneNumber,
//       text: message
//     })
//   })
//     .then(response => {
//       if (response.ok) {
//         alert('SMS notification sent successfully!');
//       } else {
//         alert('Failed to send SMS notification.');
//       }
//     })
//     .catch(error => {
//       console.error('Error sending SMS notification:', error);
//     });
// }

// function onScanSuccess(decodedText, decodedResult) {
//   addRowToTable(decodedText);

//   // Store the decoded text in local storage
//   storedData.push(decodedText);
//   localStorage.setItem('qrCodeData', JSON.stringify(storedData));

//   alert(`QR code successfully scanned. Decoded text: ${decodedText}`);

//   // Prompt user for recipient's phone number
//   const recipientPhoneNumber = prompt('Enter recipient\'s phone number:');
//   if (recipientPhoneNumber) {
//     const smsMessage = `QR code scanned successfully. Decoded text: ${decodedText}`;
//     sendSMS(smsMessage, recipientPhoneNumber);
//   }
// }

});