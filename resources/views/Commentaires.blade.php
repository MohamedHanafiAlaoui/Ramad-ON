<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Commentaires</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F7F7F7;
            color: #2D3436;
            margin: 0;
            padding: 0;
        }

        /* Navigation Bar */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #234E70;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links a {
            color: #2D3436;
            text-decoration: none;
            margin-left: 2rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #FBB13C;
        }

        .comment-section {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #234E70;
            text-align: center;
        }

        .comment-form {
            display: flex;
            flex-direction: column;
        }

        .comment-form textarea {
            width: 100%;
            height: 80px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }

        .comment-form button {
            background: #234E70;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .comment-form button:hover {
            background: #FBB13C;
        }

        .comments-list {
            margin-top: 20px;
        }

        .comment {
            background: #E8F1F2;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Footer */
        .footer {
            background: #234E70;
            color: white;
            padding: 3rem 2rem;
            margin-top: 4rem;
            text-align: center;
        }
    </style>
</head>
<body>

    
    <div class="comment-section">
        <h2>Commentaires</h2>
        <div class="comment-form">
            <textarea id="comment-input" placeholder="Ajoutez votre commentaire..."></textarea>
            <button onclick="addComment()">Publier</button>
        </div>
        <div class="comments-list" id="comments-list">
            <h3>Commentaires publiés :</h3>
        </div>
        @if ($Commentaires)
            <?= var_dump($Commentaires);?>
        @endif
        @foreach($Commentaires as $vi)
        @endforeach
    </div>

    <footer class="footer">
        <p>&copy; 2025 Ramadan. Tous droits réservés.</p>
    </footer>

    <script>
        function addComment() {
            const commentInput = document.getElementById("comment-input");
            const commentText = commentInput.value.trim();
            if (commentText !== "") {
                const commentList = document.getElementById("comments-list");
                const newComment = document.createElement("div");
                newComment.classList.add("comment");
                newComment.textContent = commentText;
                commentList.appendChild(newComment);
                commentInput.value = "";
            }
        }
    </script>
</body>
</html>
