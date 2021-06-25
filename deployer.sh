set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --message 'The app is being updated') || true
    # Update codebase
    git pull origin main
# Exit maintenance mode
php artisan up

echo "Application deployed successfully"
