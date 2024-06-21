function showContent(contentId) {
    const contents = document.querySelectorAll('.content-item');
    contents.forEach(content => {
        content.classList.remove('active');
    });
    document.getElementById(contentId).classList.add('active');
}