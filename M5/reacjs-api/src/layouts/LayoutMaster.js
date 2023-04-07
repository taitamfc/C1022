export default function LayoutMaster({ children }) {
    return (
        <div className="container">
            <h1>Header</h1>
            {/* Dòng này giống @yield('content') */}
            <div>{children}</div>
            <h1>Footer</h1>
        </div>
    );
}