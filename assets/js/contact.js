document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        var formData = new FormData(this);
        var data = {};
        formData.forEach((value, key) => { data[key] = value });

        fetch("https://script.google.com/macros/s/AKfycbwEgaYYnvToWT3Fl4x0aOl1iddmeoAASKGutjScw8UiIFwp5y-wah31AM_xtGjgcS1G/exec", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(result => {
            if (result.status === "Success") {
                alert("Your ticket number is: " + result.ticket);
            } else {
                alert("Error: " + result.message);
            }
        })
        .catch(error => {
            console.error("Fetch Error:", error);
            alert("Fetch Error: " + error.message);
        });
    });
});
