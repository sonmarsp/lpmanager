SELECT 'CREATE DATABASE lpmanager'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'lpmanager')\gexec