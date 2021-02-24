const allBlogPosts = [
    {
      date: "feb 11, 2021",
      title: "Prototyping with Figma",
      description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae alias mollitia totam? Tenetur corporis id impedit omnis, pariatur minima neque.",
      link: "prototyping-with-figma"
    },
    {
      date: "jan 19, 2021",
      title: "SEO & SEM: What's the difference?",
      description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae alias mollitia totam? Tenetur corporis id impedit omnis, pariatur minima neque.",
      link: "seo-and-seo-whats-the-difference"
    },
    {
      date: "dec 19, 2020",
      title: "Accessibility checklist",
      description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae alias mollitia totam? Tenetur corporis id impedit omnis, pariatur minima neque.",
      link: "accessbility-checklist"
    },
    {
      date: "nov 14, 2020",
      title: "Fluid text using clamp()",
      description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae alias mollitia totam? Tenetur corporis id impedit omnis, pariatur minima neque.",
      link: "fluid-text-using-clamp"
    }
   ]
   
function postTemplate(blogPost) {
  return `
    <div class="post">
        <p class="postDate">${blogPost.date}</p>
        <h2>${blogPost.title}</h2>
        <p class="description">${blogPost.description}</p>
        <p class="blogLink"><a href="/blog/${blogPost.link}.php">Read post > </a></p>
    </div>
  `;
}


document.getElementById("allBlogPosts").innerHTML = `
  <h1>all blog posts</h1>
  ${allBlogPosts.map(postTemplate).join('')}
`;


function previewTemplate(blogPost) {
  return `<li><span>${blogPost.date}</span> <a href="/blog/${blogPost.link}.php">${blogPost.title}</a></li>`;
}


document.getElementById("recentBlogPosts").innerHTML = `${allBlogPosts.map(previewTemplate).slice(0, 3)}`;