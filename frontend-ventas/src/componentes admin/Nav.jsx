function Nav({ onNavClick }) {







  return (
    <nav className=" bg-gray-600 h-screen w-[350px]">
        <div className="ml-8">
            <img className=" w-10" src="./public/menu.svg" alt="" />
        </div>
      <div className=" flex flex-col justify-center gap-10 ml-8 pt-16">
        
        <button className=" flex gap-5 items-center" onClick={onNavClick}>
          <img src="./public/users.svg" alt="logo" />
          <h1 className=" text-2xl text-white font-medium">Usuarios</h1>
        </button>
        <div className=" flex gap-5 items-center">
          <img src="./public/product.svg" alt="Articulo" />
          <h1 className=" text-2xl text-white font-medium">Articulos</h1>
        </div>
        <div className=" flex gap-5 items-center">
          <img src="./public/ingresos.svg" alt="Ingresos" />
          <h1 className=" text-2xl text-white font-medium">Ingresos </h1>
        </div>
        <div className=" flex gap-5 items-center">
          <img src="./public/ventas.svg" alt="ventas" />
          <h1 className=" text-2xl text-white font-medium">Ventas</h1>
        </div>
      </div>
    </nav>
  );
}

export default Nav;
