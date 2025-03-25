---
layout: page
permalink: /test/
icon: fas fa-stream
---

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

