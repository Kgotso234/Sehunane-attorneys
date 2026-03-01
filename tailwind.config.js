/** @type 
  {import('tailwindcss').Config}
 * 
 */

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                background: 'var(--background)',
                foreground: 'var(--foreground)',
                accent: 'var(--accent)',
                "accent-foreground": 'var(--accent-foreground)',
                primary: 'var(--primary)',
                "primary-foreground": 'var(--primary-foreground)',
                "primary-text": 'var(--primary-text)',
                secondary: 'var(--secondary)',
                "secondary-foreground": 'var(--secondary-foreground)',
                

            }
        }
    },
    plugins: [],
}