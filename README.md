<h1> Project is canceled </h1>

Turns out, it is very unreliable to track sales by jumps in amazon-rankings (by approximately 1:3).

To adjust accuracy with a correction factor feels also unreliable, so the Project is canceled.

--- 


<h1>Dashboard to keep track of book sales </h1>

Our class wrote a book about computer hardware. (https://www.amazon.de/Bau-deinen-ersten-PC-Handbuch/dp/375575357X) 

We published the book on "Books on Demand"(BoD).

The BoD account is owned by our teacher, so we always had to ask him about our sales.

To track our sales, without the account, I try to use the amazon ranks of our book:

![image](https://user-images.githubusercontent.com/70755519/216694646-5f76007a-0ebf-40b2-b474-2c189dec275a.png)

If they jump, a book was sold.

So every day I scrape our book rank from amazon and compare the rank with the previous rank.

There will be some bias because:

- our book is also listed on other shops and can be bought without jumps in amazon book ranking.

- if sales bulk on one day (for example on Christmas), many sales will be registered as one sale. 

<h2>Done:</h2>
    <p>
        <li>DB-structure
        <li>Get-request for api-call
    </p>

<h2>Work in progress:</h2>
    <p>
        <li>Command to get the ranking from amazon
        <li>Parse the response body
        <li>
    </p>

<h2>Planed:</h2>
    <p>
        <li>Adjust Command for more books
        <li>Make the response parser modular
        <li>Setup Daily scraping job 
        <li>Display Charts with filament
        <li>User accounts for autors
    </p>
