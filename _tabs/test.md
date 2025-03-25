<!DOCTYPE html>
<html>
<head>
    <title>IT Ticketing System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 text-center text-xl">
        IT Ticketing System
    </header>
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-lg font-bold mb-4">Submit a Ticket</h2>
            <form id="ticket-form">
                <label class="block mb-2">Name:</label>
                <input type="text" id="name" class="w-full border p-2 rounded mb-4" required>
                
                <label class="block mb-2">Email:</label>
                <input type="email" id="email" class="w-full border p-2 rounded mb-4" required>
                
                <label class="block mb-2">Issue:</label>
                <textarea id="issue" class="w-full border p-2 rounded mb-4" required></textarea>
                
                <button type="submit" class="bg-blue-600 text-white p-2 rounded">Submit</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded shadow-md mt-6">
            <h2 class="text-lg font-bold mb-4">Submitted Tickets</h2>
            <ul id="ticket-list" class="list-disc pl-5"></ul>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('#ticket-form').submit(function(event) {
                event.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var issue = $('#issue').val();
                
                if (name && email && issue) {
                    var ticket = `<li class='border-b p-2'><strong>${name}:</strong> ${issue} (<em>${email}</em>)</li>`;
                    $('#ticket-list').append(ticket);
                    
                    $('#name').val('');
                    $('#email').val('');
                    $('#issue').val('');
                    alert('Ticket Submitted Successfully!');
                }
            });
        });
    </script>
</body>
</html>
