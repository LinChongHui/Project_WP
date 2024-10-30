function executeComment() {
    const commentInput = document.getElementById('comment-input').value.trim();
    const commentOutput = document.getElementById('comment-output');

    if (!commentInput) return; // If input is empty, do nothing

    // Append the comment to the output
    const commentElement = document.createElement('p');
    commentElement.textContent = '> ' + commentInput;
    commentOutput.appendChild(commentElement);

    // Clear the input field
    document.getElementById('comment-input').value = '';
}