// JavaScript for rating and feedback

let userRating = 0;

function setRating(rating) {
    userRating = rating;
    highlightStars(rating);
}

function highlightStars(rating) {
    const stars = document.querySelectorAll('.star');
    stars.forEach((star, index) => {
        star.classList.toggle('highlight', index < rating);
    });
}

function submitFeedback() {
    const feedbackText = document.getElementById('user-feedback').value;
    
    // You can send the feedback and rating to the server for processing here
    // For simplicity, let's log them to the console
    console.log(`User Rating: ${userRating}`);
    console.log(`User Feedback: ${feedbackText}`);
    
    // Optionally, you can display a thank you message or reset the form
    alert('Thank you for your feedback!');
    document.getElementById('feedback-form').reset();
    userRating = 0;
    highlightStars(userRating);
}
