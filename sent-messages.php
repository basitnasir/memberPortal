<?php 
    $sent_messages_css = "./assets/css/sent-messages.css";
    $pagination_css = "./assets/css/pagination.css";
    include './includes/header.php'; 
?>

    <main class="main">
        <section class="sent-messages-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Sent <span class="fw-normal">Messages</span></h1>
                            <p class="sent-messages-count">Sent Messages (Total 20)</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sent-messages-table-main">
                            <table class="sent-messages-table">
                                <thead>
                                    <tr>
                                        <th width="5.4%">#</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Sent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td> Inquiry About EN590 10ppm Inquiry About Fertile Tested Parrot Eggs Available for Sale</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Inquiry About EN590 10ppm Inquiry About Fertile Tested Parrot Eggs Available for Sale</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Inquiry About EN590 10ppm Inquiry About Fertile Tested Parrot Eggs Available for Sale</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Inquiry About EN590 10ppm</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Inquiry About EN590 10ppm Inquiry About Fertile Tested Parrot Eggs Available for Sale</td>
                                        <td class="grayish-blue">This is a test inqui...</td>
                                        <td class="grayish-blue">3 months ago</td>
                                        <td><a class="action-link dark-gray" href="#">View Conversation</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="paginationMain">
                            <ul class="pagination flex-wrap">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link active" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php 
include './includes/footer.php'; 
?>