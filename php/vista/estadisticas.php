<div class="graficocentro">
    <div class="graficos">
        <div id="chart_div"></div>
    </div>
    <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = google.visualization.arrayToDataTable([
                ['Element', 'Density', {
                    role: 'style'
                }],
                ['Copper', 8.94, '#b87333'], // RGB value
                ['Silver', 10.49, 'silver'], // English color name
                ['Gold', 19.30, 'gold'],

                ['Platinum', 21.45, 'color: #e5e4e2'], // CSS-style declaration
            ]);

            // Set chart options
            var options = {
                title: 'Cantidad de visistas',
                width: 350,
                height: 200,
                bar: {
                    groupWidth: "95%"
                },
            };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
    <div class="graficos">
        <div id="graficodos" width="auto" height="auto"></div>
    </div>
    <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);

            // Set chart options
            var options = {
                'title': 'Paquete más comprado',
                'width': 350,
                'height': 200
            };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('graficodos'));
            chart.draw(data, options);
        }
    </script>
    <div class="graficos">
        <div id="graficodos" width="auto" height="auto"></div>
        <script type="text/javascript">
            // Load the Visualization API and the corechart package.
            google.charts.load('current', {
                'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = google.visualization.arrayToDataTable([
                    ['Element', 'Density', {
                        role: 'style'
                    }],
                    ['Copper', 8.94, '#b87333'], // RGB value
                    ['Silver', 10.49, 'silver'], // English color name
                    ['Gold', 19.30, 'gold'],

                    ['Platinum', 21.45, 'color: #e5e4e2'], // CSS-style declaration
                ]);

                // Set chart options
                var options = {
                    title: 'Cantidad de visistas',
                    width: 350,
                    height: 200,
                    bar: {
                        groupWidth: "95%"
                    },
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('graficodos'));
                chart.draw(data, options);
            }
        </script>
        <div class="graficos">
            <div id="graficotres"></div>
            <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);

            // Set chart options
            var options = {
                title: 'Paquete más comprado',
                width: 350,
                height: 200
            };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('graficotres'));
            chart.draw(data, options);
        }
    </script>
        </div>
    </div>
</div>

<div class="grafico-derecho">
    <div class="subcaja2">
        <div>
            <?php
            //ver en minuto 49,16: https://www.youtube.com/watch?v=fCTd8ilXZGI
            //ver video:https://www.youtube.com/watch?v=9BLoMGO-XcU
            //el video muestra quien inicia el software
            //session_start() esta en el: php/loguin
            include '../../php/include/cargo.php';
            $cargo = cargo();
            echo "<h3>$cargo</h3>";

            if ($nombre = $_SESSION['Nombre']) {
                echo "<p>$nombre</p>";
            }
            ?>
        </div>

        <div class="perfil">
            <?php
            $nombre1 = $_SESSION['Nombre'];
            $result = $ared->query("SELECT * FROM empleados WHERE Nombre = '$nombre1'");
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
            <?php } ?>
        </div>
    </div>
    <div class="graficos">
        <script type="text/javascript">
            // Load the Visualization API and the corechart package.
            google.charts.load('current', {
                'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = google.visualization.arrayToDataTable([
                    ['Element', 'Density', {
                        role: 'style'
                    }],
                    ['Copper', 8.94, '#b87333'], // RGB value
                    ['Silver', 10.49, 'silver'], // English color name
                    ['Gold', 19.30, 'gold'],

                    ['Platinum', 21.45, 'color: #e5e4e2'], // CSS-style declaration
                ]);

                // Set chart options
                var options = {
                    title: 'Promocion más usada',
                    width: 350,
                    height: 200,
                    bar: {
                        groupWidth: "95%"
                    },
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
    </div>
    <div class="graficos">
        <script type="text/javascript">
            // Load the Visualization API and the corechart package.
            google.charts.load('current', {
                'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = google.visualization.arrayToDataTable([
                    ['Element', 'Density', {
                        role: 'style'
                    }],
                    ['Copper', 8.94, '#b87333'], // RGB value
                    ['Silver', 10.49, 'silver'], // English color name
                    ['Gold', 19.30, 'gold'],

                    ['Platinum', 21.45, 'color: #e5e4e2'], // CSS-style declaration
                ]);

                // Set chart options
                var options = {
                    title: 'Red social mas direccionada',
                    width: 350,
                    height: 200,
                    bar: {
                        groupWidth: "95%"
                    },
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/script/graficBarras.js"></script>
<script src="/script/graficRadar.js"></script>