<?php
include 'public/header.php';
?>

<div class="row">
    <div class="col-md-8" style="margin-left:1%">
        <table class="table table-striped ">
            <thead>
                <center>
                    <h4 class="py-2 mt-2">Elemento tabla</h4>
                </center>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <h6>Elemento paginación: </h6>
        <nav aria-label="Page navigation example ">

            <ul class="pagination">

                <li class="page-item">

                    <a class="page-link" href="#" aria-label="Previous">

                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div id="" class="col-md-3">
        <center>
            <h4 class="py-2 mt-2">Elemento imagen:</h4>
            <img src="data:image/jpeg;base64,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" alt="Elemento imagen">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Este es un elemento accordion
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong>
                            </div>
                        </div>
                    </div>
        </center>
    </div>
</div>






<?php
include 'public/footer.php';
?>