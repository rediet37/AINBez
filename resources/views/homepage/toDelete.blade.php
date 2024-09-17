<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Article Title - News Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navigation (Optional) -->
  <header class="bg-white shadow py-4">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-gray-800">News Website</h1>
      <nav>
        <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
        <a href="/news" class="ml-4 text-gray-600 hover:text-blue-500">News</a>
      </nav>
    </div>
  </header>

  <!-- News Article Section -->
  <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Cover Image -->
    <img src="https://via.placeholder.com/1200x600" alt="News Cover Image" class="w-full h-72 object-cover rounded-lg shadow-lg mb-8">

    <!-- Article Content -->
    <article>
      <!-- Title -->
      <h1 class="text-4xl font-bold text-gray-800 mb-4">In-Depth News Article Title</h1>

      <!-- Author and Date -->
      <div class="flex items-center text-gray-500 mb-6">
        <span>By <span class="font-medium">John Doe</span></span>
        <span class="mx-2">•</span>
        <span>Published on Sep 17, 2024</span>
      </div>

      <!-- Tags -->
      <div class="flex flex-wrap gap-2 mb-6">
        <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">Technology</span>
        <span class="px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm">Innovation</span>
        <span class="px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full text-sm">World News</span>
      </div>

      <!-- Article Content -->
      <div class="text-gray-700 space-y-6 mb-6">
        <p class="leading-relaxed">
          This is the full content of the article. It provides detailed information on the news topic, including all necessary facts, figures, and analysis. The article is divided into paragraphs, each with a coherent thought or theme.
        </p>

        <p class="leading-relaxed">
          Additional information or background is provided here. You can include images, videos, or other media to make the content engaging.
        </p>

        <blockquote class="border-l-4 border-blue-600 pl-4 italic text-gray-600">
          "A notable quote from the article or a key statement that should be highlighted."
        </blockquote>

        <p class="leading-relaxed">
          Conclusion or final remarks that summarize the article and provide any additional insights.
        </p>
      </div>

      <!-- View Count and Social Share -->
      <div class="flex justify-between items-center">
        <!-- View Count -->
        <div class="flex items-center text-gray-500 space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2C5.454 2 2.01 7.84 1.707 8.337a1 1 0 000 1.326C2.01 10.16 5.454 16 10 16c4.546 0 7.99-5.84 8.293-6.337a1 1 0 000-1.326C17.99 7.84 14.546 2 10 2zM10 14a4 4 0 110-8 4 4 0 010 8z"/>
          </svg>
          <span>12,345 Views</span>
        </div>

        <!-- Social Share -->
        <div class="flex space-x-4 text-gray-500">
          <a href="#" class="hover:text-blue-600">Share on Facebook</a>
          <a href="#" class="hover:text-blue-400">Share on Twitter</a>
        </div>
      </div>
    </article>
  </div>

  <!-- Footer (Optional) -->
  <footer class="bg-gray-800 text-white py-6 mt-8">
    <div class="max-w-7xl mx-auto px-4">
      <p class="text-center">© 2024 News Website. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>