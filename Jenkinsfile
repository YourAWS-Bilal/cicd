pipeline {
    agent any
 stages {
     

      stage('Git Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/YourAWS-Bilal/cicd'           
            }
        }     
    stage('old build down') {
            steps {
               sh 'sudo chmod 777 -R /var/run/docker.sock'
               sh 'sudo chmod 777 -R /var/jenkins_home/workspace/CICDWORKFLOW/'
               sh 'cd /var/jenkins_home/workspace/CICDWORKFLOW/cicd/docker && docker compose down --volumes'
            }
        }
   

        
    stage('Build UP') {
            steps {
               sh 'cd /var/jenkins_home/workspace/CICDWORKFLOW/cicd/docker && docker compose up -d --build'
                
            }
        }
    stage('Testing') {
            steps {
               sh 'cd /var/jenkins_home/workspace/CICDWORKFLOW/cicd && ./vendor/bin/phpunitl UnitTestFiles/Test'
            }
        }

    }
}
