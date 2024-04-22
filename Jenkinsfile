
pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout source code from Git
                git url: 'https://github.com/ProjectsCC/VOTING_SYSTEM.git', branch: 'main'
            }
        }
        stage('Build') {
            steps {
                // Build your PHP project
                dir('C:\\composer')
                bat 'call "C:\\xampp\\php\\php.exe" composer install'
            }
        }
        stage('Dockerize') {
            steps {
                // Build Docker image
                bat 'docker build -t php:8.0 .'
            }
        }
        stage('Deploy') {
            steps {
                // Deploy Docker image
                bat 'docker run -d -p 8083:80 php:8.0'
            }
        }
    }
}

