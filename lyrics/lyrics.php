
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #181818;
        }
        main {
            max-width: 400px;
            margin: 40px auto;
            background: #282828;
            padding: 32px 24px 24px 24px;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.3);
        }
        /* titulo */
        .title {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 18px;
        }

        .title a{
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 1.1rem;
            transition: color 0.2s;
        }
        .title img {
            width: 72px;
            height: 72px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }
        .title-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .title-text strong {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .title-text span {
            font-size: 1rem;
            color: #b3b3b3;
            font-weight: normal;
        }
        /* Player estilo Spotify */
        .spotify-player {
            background: #181818;
            border-radius: 12px;
            padding: 18px 16px;
            margin-bottom: 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        .spotify-player audio {
            width: 100%;
            max-width: 260px;
            margin: 0 auto;
            display: block;
            background: none;
            border: none;
            outline: none;
            box-shadow: none;
            filter: invert(1) grayscale(1) brightness(1.2);
        }
        /* Letras */
        .lyrics {
            margin-top: 12px;
            line-height: 1.6;
            color: #fff;
            font-size: 1rem;
            text-align: left;
        }
        /* Botão de link estilo Spotify */
        .spotify-link {
            display: inline-block;
            background: #1db954;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            border-radius: 20px;
            padding: 8px 18px;
            margin-top: 8px;
            margin-bottom: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            text-align: center;
            width: 100%;
            font-size: 0.95rem;
            transition: background 0.2s;
        }
        .spotify-link:hover {
            background: #1ed760;
        }
    </style>
</head>
<body>
<main>
    <div class="title">
        <img src="https://imageio.forbes.com/blogs-images/ogdenpayne/files/2017/02/Daniel-Caesar-NEw-by-Keith-Henry.jpg?format=jpg&height=600&width=1200&fit=bounds" alt="Daniel Caesar">
        <div class="title-text">
            <strong>Best Part (feat. H.E.R.)</strong>
            <span>Daniel Caesar</span>
            <a class="spotify-link" href="https://open.spotify.com/intl-pt/track/1RMJOxR6GRPsBHL8qeC2ux?si=d1c9ee74f6714eba" target="_blank" rel="noopener noreferrer">Ouvir no Spotify</a>
        </div>
    </div>
    <div class="spotify-player">
        <audio controls>
            <source src="Daniel Caesar - Best Part (Audio) ft. H.E.R. [vBy7FaapGRo].mp3">
            Seu navegador não suporta o elemento de áudio.
        </audio>
    </div>
<div class="lyrics">
    <?php
    echo "You don't know, babe<br>
When you hold me<br>
And kiss me slowly<br>
It's the sweetest thing<br>
And it don't change<br>
If I had it my way<br>
You would know that you are<br><br>

You're the coffee that I need in the morning<br>
You're my sunshine in the rain when it's pouring<br>
Won't you give yourself to me?<br>
Give it all, oh<br>
I just wanna see<br><br>

I just wanna see how beautiful you are<br>
You know that I see it<br>
I know you're a star<br>
Where you go, I follow<br>
No matter how far<br>
If life is a movie<br>
Oh, you're the best part, oh<BR>
You're the best part, oh<BR>
Best part<BR><BR>

It's this sunrise<BR>
And those brown eyes, yes<BR>
You're the one that I desire<br>
When we wake up<BR>
And then we make love<BR>
It makes me feel so nice<BR><BR>

You're my water when I'm stuck in the desert<BR>
You're the Tylenol I take when my head hurts<BR>
You're the sunshine on my life<BR><BR>

I just wanna see how beautiful you are<Br>
You know that I see it<BR>
I know you're a star<BR>
Where you go, I follow<BR>
No matter how far<BR>
If life is a movie<BR>
Then you're the best part, oh<BR>
You're the best part, oh<BR>
Best part<BR><BR>

If you love me, won't you say something?<BR>
If you love me, won't you, won't you<BR>
If you love me, won't you say something?<BR>
If you love me, won't you<BR>
Love me, won't you<BR><BR>

If you love me, won't you say something?<BR>
If you love me, won't you<BR>
If you love me, won't you say something?<BR>
If you love me, won't you<BR>
Love me, won't you<BR><BR>

If you love me, won't you say something?<BR>
If you love me, won't you<BR>
If you love me, won't you say something?<BR>
If you love me, won't you<BR>
Love me, won't you<BR> <BR>";


?>
</div>
</main>

</body>
</html>