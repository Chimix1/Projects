import Cart from "./components/Cart";
import Checkout from "./components/Checkout";
import Header from "./components/Header";
import Meals from "./components/Meals";
import { CartContextProvider } from "./store/CartContext";
import { UserProgressContextProvider } from "./store/UserProgressContext";
import { Opinions } from './components/Opinions';
import { NewOpinion } from './components/NewOpinion';
import { OpinionsContextProvider } from './store/opinions-context';



function App() {
  return (
    <UserProgressContextProvider>
    <CartContextProvider>
    <OpinionsContextProvider>
      <Header />
      <Meals />
      <Cart />
      <Checkout />
      <NewOpinion />
      <Opinions />
      </OpinionsContextProvider>
    </CartContextProvider>
    </UserProgressContextProvider>
    
  );
}

export default App;
