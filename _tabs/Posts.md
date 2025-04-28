---
layout: page
permalink: /Posts/
icon: fas fa-shield-alt
---

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posts from Google Sheets</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .post { border-bottom: 1px solid #ccc; margin-bottom: 20px; padding-bottom: 20px; }
    .post h2 { margin-top: 0; }
  </style>
</head>
<body>

<h1>Posts</h1>
<div id="posts"></div>

<script>
const sheetURL = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vTt4pN-NQYJpbD2JHziZke36zRMNWd6vkVMELm435RLz5YcBqyHTNbcr2o19sz-tp_sfaoUTqSZ6PzT/pub?output=csv'; // Updated URL

// Function to convert CSV data to JSON
function csvToJson(csv) {
  const lines = csv.split('\n');
  const result = [];
  const headers = lines[0].split(',');

  for (let i = 1; i < lines.length; i++) {
    const obj = {};
    const currentline = lines[i].split(',');
    for (let j = 0; j < headers.length; j++) {
      obj[headers[j].trim()] = currentline[j]?.trim();
    }
    if (Object.keys(obj).length > 0) {
      result.push(obj);
    }
  }
  return result;
}

// Function to display posts on the page
function showPosts(data) {
  const postsDiv = document.getElementById('posts');
  data.forEach(post => {
    if (post.title) { // Avoid blank lines
      const postDiv = document.createElement('div');
      postDiv.className = 'post';
      postDiv.innerHTML = `
        <h2>${post.title}</h2>
        <p>${post.content}</p>
        <small>Posted by ${post.author} on ${post.date}</small>
      `;
      postsDiv.appendChild(postDiv);
    }
  });
}

// Fetch the data
fetch(sheetURL)
  .then(response => response.text()) // Parse as text (CSV)
  .then(csv => {
    const jsonData = csvToJson(csv);  // Convert CSV to JSON
    showPosts(jsonData);  // Display posts
  })
  .catch(error => {
    console.error('Error fetching data: ', error);
  });
</script>

</body>
</html>
