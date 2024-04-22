pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout source code from Git
                git 'https://github.com/ProjectsCC/VOTING_SYSTEM.git'
            }
        }
        stage('Build') {
            steps {
                // Build your PHP project
                bat 'composer install'
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

