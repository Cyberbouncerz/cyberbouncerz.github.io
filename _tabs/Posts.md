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

<script src="https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.4/tabletop.min.js"></script>
<script>
  const publicSpreadsheetKey = '2PACX-1vTt4pN-NQYJpbD2JHziZke36zRMNWd6vkVMELm435RLz5YcBqyHTNbcr2o19sz-tp_sfaoUTqSZ6PzT'; // Sheet ID

  function showPosts(data, tabletop) {
    const postsDiv = document.getElementById('posts');
    data.forEach(post => {
      const postDiv = document.createElement('div');
      postDiv.className = 'post';
      postDiv.innerHTML = `
        <h2>${post.title}</h2>
        <p>${post.content}</p>
        <small>Posted by ${post.author} on ${post.date}</small>
      `;
      postsDiv.appendChild(postDiv);
    });
  }

  window.addEventListener('DOMContentLoaded', () => {
    Tabletop.init({
      key: publicSpreadsheetKey,
      simpleSheet: true,
      callback: showPosts
    });
  });
</script>

</body>
</html>
