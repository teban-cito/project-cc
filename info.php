<?php
// Archivo: info.php
// Ubicación: /var/www/html/info.php
// Propósito: Mostrar información completa del servidor web, PHP, MySQL y sistema

// Configuración de la página
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Servidor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #007cba;
            padding-bottom: 10px;
        }
        h2 {
            color: #007cba;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-top: 30px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .info-box {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #007cba;
            border-radius: 4px;
        }
        .info-item {
            margin: 8px 0;
            padding: 5px 0;
        }
        .info-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            min-width: 150px;
        }
        .info-value {
            color: #333;
        }
        .status-ok {
            color: #28a745;
            font-weight: bold;
        }
        .status-error {
            color: #dc3545;
            font-weight: bold;
        }
        .status-warning {
            color: #ffc107;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            text-align: left;
            padding: 8px 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007cba;
            color: white;
        }
        .timestamp {
            text-align: center;
            color: #666;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información del Servidor Web</h1>
        
        <!-- Información de la Máquina Virtual -->
        <h2>🖥️ Especificaciones de la Máquina Virtual</h2>
        <div class="info-grid">
            <div class="info-box">
                <h3>Hardware Virtual</h3>
                <div class="info-item">
                    <span class="info-label">Memoria RAM:</span>
                    <span class="info-value">4 GB</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Procesador:</span>
                    <span class="info-value">Doble Núcleo</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Video:</span>
                    <span class="info-value">128 MB</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Disco Duro:</span>
                    <span class="info-value">50 GB</span>
                </div>
            </div>
            
            <div class="info-box">
                <h3>Sistema Operativo</h3>
                <div class="info-item">
                    <span class="info-label">OS:</span>
                    <span class="info-value"><?php echo php_uname('s'); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Versión:</span>
                    <span class="info-value"><?php echo php_uname('r'); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Arquitectura:</span>
                    <span class="info-value"><?php echo php_uname('m'); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Hostname:</span>
                    <span class="info-value"><?php echo php_uname('n'); ?></span>
                </div>
            </div>
        </div>

        <!-- Información del Servidor Web -->
        <h2>🌐 Servidor Web Apache</h2>
        <div class="info-grid">
            <div class="info-box">
                <h3>Configuración Apache</h3>
                <div class="info-item">
                    <span class="info-label">Software:</span>
                    <span class="info-value"><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'No disponible'; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Puerto:</span>
                    <span class="info-value"><?php echo $_SERVER['SERVER_PORT'] ?? '80'; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Documento Root:</span>
                    <span class="info-value"><?php echo $_SERVER['DOCUMENT_ROOT'] ?? '/var/www/html'; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Servidor:</span>
                    <span class="info-value"><?php echo $_SERVER['SERVER_NAME'] ?? 'localhost'; ?></span>
                </div>
            </div>
        </div>

        <!-- Información de PHP -->
        <h2>🐘 Información PHP</h2>
        <div class="info-grid">
            <div class="info-box">
                <h3>Versión y Configuración</h3>
                <div class="info-item">
                    <span class="info-label">Versión PHP:</span>
                    <span class="info-value"><?php echo phpversion(); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">SAPI:</span>
                    <span class="info-value"><?php echo php_sapi_name(); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Limite Memoria:</span>
                    <span class="info-value"><?php echo ini_get('memory_limit'); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Max Upload:</span>
                    <span class="info-value"><?php echo ini_get('upload_max_filesize'); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Max Execution:</span>
                    <span class="info-value"><?php echo ini_get('max_execution_time'); ?>s</span>
                </div>
            </div>
            
            <div class="info-box">
                <h3>Extensiones Importantes</h3>
                <div class="info-item">
                    <span class="info-label">MySQL:</span>
                    <span class="info-value <?php echo extension_loaded('mysqli') ? 'status-ok' : 'status-error'; ?>">
                        <?php echo extension_loaded('mysqli') ? '✓ Instalada' : '✗ No instalada'; ?>
                    </span>
                </div>
                <div class="info-item">
                    <span class="info-label">PDO:</span>
                    <span class="info-value <?php echo extension_loaded('pdo') ? 'status-ok' : 'status-error'; ?>">
                        <?php echo extension_loaded('pdo') ? '✓ Instalada' : '✗ No instalada'; ?>
                    </span>
                </div>
                <div class="info-item">
                    <span class="info-label">GD:</span>
                    <span class="info-value <?php echo extension_loaded('gd') ? 'status-ok' : 'status-error'; ?>">
                        <?php echo extension_loaded('gd') ? '✓ Instalada' : '✗ No instalada'; ?>
                    </span>
                </div>
                <div class="info-item">
                    <span class="info-label">cURL:</span>
                    <span class="info-value <?php echo extension_loaded('curl') ? 'status-ok' : 'status-error'; ?>">
                        <?php echo extension_loaded('curl') ? '✓ Instalada' : '✗ No instalada'; ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Información de MySQL -->
        <h2>🗄️ Base de Datos MySQL</h2>
        <div class="info-grid">
            <div class="info-box">
                <h3>Estado de MySQL</h3>
                <?php
                $mysql_status = 'No disponible';
                $mysql_version = 'No disponible';
                $mysql_status_class = 'status-error';
                
                try {
                    if (extension_loaded('mysqli')) {
                        // Intentar conexión a MySQL
                        $connection = @new mysqli('localhost', 'root', '');
                        if ($connection->connect_error) {
                            $mysql_status = 'Error de conexión';
                            $mysql_status_class = 'status-error';
                        } else {
                            $mysql_status = 'Conectado correctamente';
                            $mysql_status_class = 'status-ok';
                            $result = $connection->query('SELECT VERSION() as version');
                            if ($result) {
                                $row = $result->fetch_assoc();
                                $mysql_version = $row['version'];
                            }
                            $connection->close();
                        }
                    }
                } catch (Exception $e) {
                    $mysql_status = 'Error: ' . $e->getMessage();
                    $mysql_status_class = 'status-error';
                }
                ?>
                <div class="info-item">
                    <span class="info-label">Estado:</span>
                    <span class="info-value <?php echo $mysql_status_class; ?>"><?php echo $mysql_status; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Versión:</span>
                    <span class="info-value"><?php echo $mysql_version; ?></span>
                </div>
            </div>
        </div>

        <!-- Información del Sistema -->
        <h2>⚙️ Información del Sistema</h2>
        <div class="info-grid">
            <div class="info-box">
                <h3>Recursos y Estado</h3>
                <div class="info-item">
                    <span class="info-label">Uptime:</span>
                    <span class="info-value">
                        <?php 
                        $uptime = @file_get_contents('/proc/uptime');
                        if ($uptime) {
                            $uptime_seconds = (int)explode(' ', $uptime)[0];
                            $days = floor($uptime_seconds / 86400);
                            $hours = floor(($uptime_seconds % 86400) / 3600);
                            $minutes = floor(($uptime_seconds % 3600) / 60);
                            echo "$days días, $hours horas, $minutes minutos";
                        } else {
                            echo 'No disponible';
                        }
                        ?>
                    </span>
                </div>
                <div class="info-item">
                    <span class="info-label">Carga promedio:</span>
                    <span class="info-value">
                        <?php 
                        $load = sys_getloadavg();
                        if ($load) {
                            printf("%.2f, %.2f, %.2f", $load[0], $load[1], $load[2]);
                        } else {
                            echo 'No disponible';
                        }
                        ?>
                    </span>
                </div>
                <div class="info-item">
                    <span class="info-label">Uso de memoria:</span>
                    <span class="info-value"><?php echo memory_get_usage(true) / 1024 / 1024; ?> MB</span>
                </div>
            </div>
            
            <div class="info-box">
                <h3>Espacio en Disco</h3>
                <div class="info-item">
                    <span class="info-label">Espacio libre:</span>
                    <span class="info-value">
                        <?php 
                        $free_bytes = disk_free_space('/');
                        $total_bytes = disk_total_space('/');
                        if ($free_bytes && $total_bytes) {
                            echo round($free_bytes / 1024 / 1024 / 1024, 2) . ' GB de ' . 
                                 round($total_bytes / 1024 / 1024 / 1024, 2) . ' GB';
                        } else {
                            echo 'No disponible';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Variables de Entorno Importantes -->
        <h2>🔧 Variables de Entorno</h2>
        <table>
            <thead>
                <tr>
                    <th>Variable</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>HTTP_HOST</td><td><?php echo $_SERVER['HTTP_HOST'] ?? 'No definida'; ?></td></tr>
                <tr><td>REQUEST_URI</td><td><?php echo $_SERVER['REQUEST_URI'] ?? 'No definida'; ?></td></tr>
                <tr><td>SCRIPT_NAME</td><td><?php echo $_SERVER['SCRIPT_NAME'] ?? 'No definida'; ?></td></tr>
                <tr><td>REMOTE_ADDR</td><td><?php echo $_SERVER['REMOTE_ADDR'] ?? 'No definida'; ?></td></tr>
                <tr><td>USER_AGENT</td><td><?php echo substr($_SERVER['HTTP_USER_AGENT'] ?? 'No definida', 0, 100) . '...'; ?></td></tr>
            </tbody>
        </table>

        <div class="timestamp">
            <p><strong>Información generada el:</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
            <p><strong>Timezone:</strong> <?php echo date_default_timezone_get(); ?></p>
        </div>
    </div>

    <script>
        // Auto-refresh cada 30 segundos para información dinámica
        setTimeout(function() {
            // Puedes descomentar la siguiente línea si deseas auto-refresh
            // location.reload();
        }, 30000);
    </script>
</body>
</html>