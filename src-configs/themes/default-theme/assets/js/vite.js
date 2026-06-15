import '../css/main.css'

console.log('Vite running with HMR')

// Optional: HMR hook
if (import.meta.hot) {
  import.meta.hot.accept(() => {
    console.log('HMR updated!')
  })
}