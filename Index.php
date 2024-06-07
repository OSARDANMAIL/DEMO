[3:51 PM] OSARENOMA DANIEL IMADE
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>File Upload</title>

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <header>

        <div class="header-content">

            <img src="images/new-logo.png" alt="Omega Logo" class="logo">

            <h1>Tax Credit Qualification Review</h1>

        </div>

    </header>

    <main>

        <section class="alert">

            <p>The due date was <strong>3 months ago</strong></p>

        </section>

        <section class="upload-section">

            <div class="section">

                <h2>General Business Information</h2>

            </div>

            <div class="section">

                <h3>2020 Filed Business Tax Returns</h3>

                <p>Please upload your filed business tax returns for 2020.</p>

                <div class="upload-box" id="upload-box-2020">

                    <input type="file" id="file-2020" multiple>

                    <button type="button" onclick="document.getElementById('file-2020').click()">Drag & Drop your files here or browse</button>

                    <div id="file-list-2020"></div>

                </div>

            </div>

            <div class="section">

                <h3>2021 Filed Business Tax Returns</h3>

                <p>Please upload your filed business tax returns for 2021.</p>

                <div class="upload-box" id="upload-box-2021">

                    <input type="file" id="file-2021" multiple>

                    <button type="button" onclick="document.getElementById('file-2021').click()">Drag & Drop your files here or browse</button>

                    <div id="file-list-2021"></div>

                </div>

            </div>

            <div class="section">

                <h3>2023 Profit and Loss Statement (P&L)</h3>

                <p>Please upload your 2023 annual profit and loss statements.</p>

                <div class="upload-box" id="upload-box-2023-pl">

                    <input type="file" id="file-2023-pl" multiple>

                    <button type="button" onclick="document.getElementById('file-2023-pl').click()">Drag & Drop your files here or browse</button>

                    <div id="file-list-2023-pl"></div>

                </div>

            </div>

            <div class="section">

                <h3>2020, 2021, 2022, and 2023 Balance Sheets</h3>

                <p>Please upload your 2020 - 2023 balance sheets.</p>

                <div class="upload-box" id="upload-box-balance">

                    <input type="file" id="file-balance" multiple>

                    <button type="button" onclick="document.getElementById('file-balance').click()">Drag & Drop your files here or browse</button>

                    <div id="file-list-balance"></div>

                </div>

            </div>

            <div class="section submit-section">

                <button type="button" onclick="submitFiles()">Submit for review</button>

            </div>

        </section>

    </main>

    <script src="scripts.js"></script>

</body>

</html>
