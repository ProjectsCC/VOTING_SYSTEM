pipeline {
    agent any

    stages {
        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image using Dockerfile
                    //docker.build('my-image:latest', '-f Dockerfile .')
                    docker.build('php:8.0', '-f Dockerfile .')
                }
            }
        }
        
        stage('Run Docker Container') {
            steps {
                script {
                    // Run Docker container from the built image
                     docker.image('php:8.0').run('-p 8081:8080')
                }
            }
        }
    }
}
