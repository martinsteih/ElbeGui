export default function ShoppingList(props){
	return(
		<div ClassName="ShoppingList">
			<h2>Shopping list for {props.name}</h2>
			<ul>
				<li>Instagram</li>
				<li>WhatsApp</li>
				<li>Oculus</li>
			</ul>
		</div>
	);
}