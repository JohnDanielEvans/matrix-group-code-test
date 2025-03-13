# WordPress Development Environment

A streamlined development environment for WordPress sites and applications, adapted from [Bedrock](https://github.com/roots/bedrock).

## Prerequisites

Ensure you have the following installed before proceeding:

- [Docker](https://www.docker.com/)

## Setting Up a New Project

Follow these steps to initialize your project:

1. **Clone the Repository:**

   ```bash
   git clone <repository-url>
   ```

2. **Remove Git History (if starting a fresh project):**

   ```bash
   rm -rf .git
   ```

3. **Configure Environment Variables:**

   - Navigate to the `docker` folder.
   - Copy `.env.example` to `.env` and adjust settings as needed. Most default values should work.

4. **Start the Docker Environment:**
   Open a terminal in the project root and run:

   ```bash
   docker compose -f ./docker/docker-compose.yml up
   ```

5. **Install Composer Dependencies:**

   ```bash
   docker run --rm -it --platform=linux/amd64 -v $(pwd)/src:/wp-content composer /bin/bash -c "composer install --ignore-platform-reqs"
   ```

## Accessing the Site

Once the environment is running, your site will be available at:

```
http://${APP_HOSTNAME}.localhost
```

(Default port is 80, so no need to specify a port in the URL.)

## Additional Notes

- Make sure your `.env` file is correctly configured before starting the environment.
- For troubleshooting, check Docker logs using:
  ```bash
  docker logs <container-name>
  ```