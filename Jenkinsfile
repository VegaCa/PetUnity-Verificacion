pipeline {
    agent any
    environment {
        PROJECT_DIR = 'C:/xampp/htdocs/PetUnity-Verificacion'
        //----------------------------------------------
        SONARQUBE_START = 'C:/xampp/htdocs/sonarqube-10.7.0.96327/bin/windows-x86-64/StartSonar.bat'
        SONAR_SCANNER_PATH = 'C:/xampp/htdocs/sonar-scanner-6.2.1.4610-windows-x64/bin/sonar-scanner.bat' 
        //----------------------------------------------
        POSTMAN_COLLECTION = 'C:/xampp/htdocs/PetUnity-Verificacion/Verificaion-Validacion.postman_collection.json'
        NEWMAN_PATH = 'C:/Users/patri/AppData/Roaming/npm/newman.cmd'
        //----------------------------------------------
        JMETER_PATH = 'C:/xampp/htdocs/apache-jmeter-5.6.3/bin/jmeter.bat'
        JMETER_TEST_DIR = 'C:/xampp/htdocs/PetUnity-JMeter'
        JMETER_TEST_FILE = 'PRUEBAS-PETUNITY.jmx'
        //----------------------------------------------
        ZAP_DIR = 'C:/Program Files/ZAP/Zed Attack Proxy'
        EXCLUSION_FILE = 'C:/xampp/htdocs/PetUnity-Verificacion/exclusion.txt'
        TARGET_URL = 'http://127.0.0.1:8000'
        ZAP_REPORT_PATH = 'C:/xampp/htdocs/PetUnity-Verificacion/zap-report.html'
        ZAP_PORT = '8083'
    }
    stages {
        stage('Construcción Automática') {
            steps {
                echo 'Ejecutando: composer install, php artisan migrate, php artisan serve'
                dir(PROJECT_DIR) {
                    bat 'composer install'
                    bat 'php artisan migrate'
                    bat 'start /B php artisan serve' 
                }
            }
        }
        stage('Análisis Estático con SonarQube') {
            steps {
                echo 'Iniciando SonarQube'
                bat "start $SONARQUBE_START"
                echo 'Esperando a que SonarQube se inicie...'
                sleep(time: 30, unit: 'SECONDS') 
                echo 'Ejecutando análisis estático con SonarQube'
                dir(PROJECT_DIR) {
                    withSonarQubeEnv('Sonar-PetUnity') { 
                       bat "$SONAR_SCANNER_PATH"
                    }
                }
            }
        }
        stage('Pruebas Unitarias con PHPUnit') {
            steps {
                echo 'Ejecutando pruebas unitarias con PHPUnit'
                dir(PROJECT_DIR) {
                    bat 'vendor\\bin\\phpunit --configuration phpunit.xml'
                }
            }
        }
        stage('Pruebas Funcionales con Newman') {
            steps {
                echo 'Ejecutando pruebas funcionales con Newman'
                bat "$NEWMAN_PATH run $POSTMAN_COLLECTION"
            }
        }
        stage('Pruebas de Rendimiento con JMeter') {
            steps {
                echo 'Ejecutando pruebas de rendimiento con JMeter'
                dir(JMETER_TEST_DIR) {
                    bat "$JMETER_PATH -n -t $JMETER_TEST_FILE -l result.jtl -e -o report"
                }
            }
        }
        stage('Pruebas de Seguridad con OWASP ZAP') {
            steps {
                echo 'Iniciando OWASP ZAP en modo daemon'
                script {
                    dir(ZAP_DIR) {
                        bat """
                            start /B zap.bat -daemon -port $ZAP_PORT \
                            -config api.disablekey=true \
                            -config spider.excludedregexfile=$EXCLUSION_FILE
                        """
                    }
                    echo 'Esperando que OWASP ZAP esté disponible...'
                    sleep(time: 30, unit: 'SECONDS')

                    
                    echo 'Iniciando Spider Scan'
                    bat """
                        curl -X GET "http://127.0.0.1:$ZAP_PORT/JSON/spider/action/scan/?url=$TARGET_URL&maxChildren=10" \
                        -H "Content-Type: application/json"
                    """
                    echo 'Esperando a que Spider Scan complete su ejecución...'
                    sleep(time: 2, unit: 'MINUTES')

                    
                    echo 'Iniciando Active Scan'
                    bat """
                        curl -X GET "http://127.0.0.1:$ZAP_PORT/JSON/ascan/action/scan/?url=$TARGET_URL" \
                        -H "Content-Type: application/json"
                    """
                    echo 'Esperando a que Active Scan complete su ejecución...'
                    sleep(time: 5, unit: 'MINUTES')
                    //Para ver el avance
                    //http://127.0.0.1:8083/JSON/spider/view/status/?scanId=1
                    echo 'Generando reporte de OWASP ZAP'
                    bat """
                        curl -X GET "http://127.0.0.1:$ZAP_PORT/OTHER/core/other/htmlreport/?" \
                        --output $ZAP_REPORT_PATH
                    """
                    echo 'Reporte generado en: $ZAP_REPORT_PATH'
                }
            }
        }
    }
}